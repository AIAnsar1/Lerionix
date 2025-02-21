<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TeamResource\{Pages, RelationManagers};
use App\Models\Team;
use Filament\Forms;
use Filament\Forms\Components\KeyValue;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\{Builder, SoftDeletingScope};
use Filament\Forms\Components\{DatePicker, FileUpload, Select, Toggle, TextInput};
use Filament\Tables\Columns\{BadgeColumn, ImageColumn};

class TeamResource extends Resource
{
    protected static ?string $model = Team::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->maxLength(255)->required(),
                FileUpload::make('photo')->image()->directory('uploads/teams/photos')->maxSize(2048)->required(),
                TextInput::make('profession')->maxLength(255)->required(),
                TextInput::make('description')->maxLength(500)->required(),
                Select::make('stars')->options([
                        '1' => '1 звезда',
                        '2' => '2 звезды',
                        '3' => '3 звезды',
                        '4' => '4 звезды',
                        '5' => '5 звезд',
                ])->required()->searchable()->native(false),
                KeyValue::make('socials_networks')
                ->keyLabel('Социальные Сети')
                ->valueLabel('Ссылка на Социальную Сеть')
                ->addButtonLabel('Добавить Соц Сеть')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable()->searchable(),
                TextColumn::make('name')->sortable()->searchable(),
                ImageColumn::make('photo')->sortable()->searchable(),
                TextColumn::make('profession')->sortable()->searchable(),
                TextColumn::make('description'),
                BadgeColumn::make('stars')->colors([
                    '1' => 'gray',
                    '2' => 'blue',
                    '3' => 'green',
                    '4' => 'yellow',
                    '5' => 'red',
                ])->sortable()->searchable(),
                TextColumn::make('socials_networks')->formatStateUsing(fn ($state) => json_encode($state))->sortable()->searchable(),
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
            'index' => Pages\ListTeams::route('/'),
            'create' => Pages\CreateTeam::route('/create'),
            'edit' => Pages\EditTeam::route('/{record}/edit'),
        ];
    }
}
