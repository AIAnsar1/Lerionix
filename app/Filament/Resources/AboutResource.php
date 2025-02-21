<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AboutResource\{Pages, RelationManagers};
use App\Models\About;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\{TextColumn, BadgeColumn};
use Filament\Forms\Components\{CheckboxList, KeyValue, Select, TextInput};
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
                KeyValue::make('socials_networks')->keyLabel('Социальные Сети')
                ->valueLabel('Ссылка на Социальную Сеть')->addButtonLabel('Добавить Соц Сеть')->required(),
                KeyValue::make('questions')->keyLabel('Добавить Вопрос и Ответ')
                ->valueLabel('Вопрос и Ответ')->addButtonLabel('Добавить Вопрос и Ответ')->required(),
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
                TextColumn::make('socials_networks')->label('Social Networks')->sortable()->searchable(),
                TextColumn::make('questions')->label('Questions')->sortable()->searchable(),
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
