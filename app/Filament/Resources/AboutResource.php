<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AboutResource\{Pages, RelationManagers};
use App\Models\About;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\{TextColumn, BadgeColumn};
use Filament\Forms\Components\{CheckboxList, KeyValue, Select, TextInput, Textare, Repeater, Textarea};
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\{Builder, SoftDeletingScope};

class AboutResource extends Resource
{
    protected static ?string $model = About::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')->maxLength(255)->required(),
                Repeater::make('socials_networks')
                ->label('Социальные сети')
                ->schema([
                    TextInput::make('name')
                        ->label('Название социальной сети')
                        ->required()
                        ->placeholder('Например: Facebook, Twitter, LinkedIn'),

                    TextInput::make('url')
                        ->label('Ссылка на социальную сеть')
                        ->required()
                        ->url()
                        ->placeholder('https://example.com'),
                ])
                ->addActionLabel('Добавить социальную сеть')
                ->reorderable()
                ->collapsible()
                ->minItems(1)
                ->maxItems(10)
                ->default([]),
                Repeater::make('questions')
                ->label('Вопросы и ответы')
                ->schema([
                    TextInput::make('question')
                        ->label('Вопрос')
                        ->required()
                        ->placeholder('Введите вопрос'),

                    Textarea::make('answer')
                        ->label('Ответ')
                        ->required()
                        ->placeholder('Введите ответ'),
                ])
                ->addActionLabel('Добавить вопрос')
                ->reorderable()
                ->collapsible()
                ->minItems(1)
                ->maxItems(20)
                ->default([]),
                TextInput::make('address')->maxLength(255)->required(),
                TextInput::make('map')->maxLength(255)->required(),
                TextInput::make('mail')->maxLength(255)->required(),
                TextInput::make('phone')->maxLength(255)->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make(name: 'id')->sortable()->searchable(),
                TextColumn::make('title')->sortable()->searchable(),
                TextColumn::make('socials_networks')
                    ->label('Social Networks')
                    ->formatStateUsing(fn ($state) =>
                    is_string($state) && ($decoded = json_decode($state, true)) && is_array($decoded) && isset($decoded['name'])
                        ? $decoded['name'] // Показываем только имя соцсети
                        : 'No Data'
                    ),

                TextColumn::make('questions')
                    ->label('Questions')
                    ->formatStateUsing(fn ($state) =>
                    is_string($state) && ($decoded = json_decode($state, true)) && is_array($decoded)
                        ? (isset($decoded['question']) && isset($decoded['answer'])
                        ? '<b>' . e($decoded['question']) . '</b>: ' . e($decoded['answer'])
                        : 'Invalid data')
                        : 'No Questions Available'
                    )
                    ->html(),
                TextColumn::make('address')->searchable(),
                TextColumn::make('map')->limit(255)->searchable(),
                TextColumn::make('mail')->searchable(),
                TextColumn::make('phone')->searchable(),
                TextColumn::make('created_at')->dateTime(),
                TextColumn::make('updated_at')->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAbouts::route('/'),
            'create' => Pages\CreateAbout::route('/create'),
            'edit' => Pages\EditAbout::route('/{record}/edit'),
        ];
    }
}


