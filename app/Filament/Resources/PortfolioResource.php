<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PortfolioResource\{Pages, RelationManagers};
use App\Models\Portfolio;
use App\Models\Tags;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\{ImageColumn, TagsColumn, TextColumn};
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\{Builder, SoftDeletingScope};
use Filament\Forms\Components\{DatePicker, FileUpload, KeyValue, Select, Toggle, TextInput};


class PortfolioResource extends Resource
{
    protected static ?string $model = Portfolio::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')->maxLength(255)->required(),
                TextInput::make('type')->maxLength(255)->required(),
                FileUpload::make('photo')->disk('public')->directory('uploads/portfolio/photos')->image()->imageEditor()->maxSize(1024)->required(),
                TextInput::make('description')->maxLength(255)->required(),
                TextInput::make('project_link')->label('Ссылка на проект')->placeholder('Добавить ссылку на проект!')->url()->required(),
                // TextInput::make('tags.title')->label('Tags')->badge()->separator(', '),
                // Select::make('tags')->label('Tags')->relationship('tags', 'title')->multiple()->preload(),
                // Select::make('tags')->label('Tags')->options(Tags::all()->pluck('title', 'id'))->relationship('tags', 'title')->multiple()->preload(),
                Select::make('tags')->label('Tags')->relationship('tags', 'title', function ($query) {
                    $query->distinct();
                })->multiple()->preload()->required(),

                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable()->searchable(),
                TextColumn::make('title')->sortable()->searchable(),
                TextColumn::make('type')->sortable()->searchable(),
                ImageColumn::make('photo')->disk('public')->defaultImageUrl('uploads/portfolio/photos')->size(70)->circular()->sortable()->searchable(),
                TextColumn::make('description')->sortable()->searchable(),
                TextColumn::make('project_link')->sortable()->searchable(),
                TextColumn::make('tags.title')->label('Tags')->badge()->separator(', ')->sortable()->searchable(),
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
            'index' => Pages\ListPortfolios::route('/'),
            'create' => Pages\CreatePortfolio::route('/create'),
            'edit' => Pages\EditPortfolio::route('/{record}/edit'),
        ];
    }
}
