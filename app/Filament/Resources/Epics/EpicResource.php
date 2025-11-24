<?php

namespace App\Filament\Resources\Epics;

use App\Filament\Resources\Epics\Pages\CreateEpic;
use App\Filament\Resources\Epics\Pages\EditEpic;
use App\Filament\Resources\Epics\Pages\ListEpics;
use App\Filament\Resources\Epics\Pages\ViewEpic;
use App\Filament\Resources\Epics\Schemas\EpicForm;
use App\Filament\Resources\Epics\Schemas\EpicInfolist;
use App\Filament\Resources\Epics\Tables\EpicsTable;
use App\Models\Epic;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class EpicResource extends Resource
{
    protected static ?string $model = Epic::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return EpicForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return EpicInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return EpicsTable::configure($table);
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
            'index' => ListEpics::route('/'),
            'create' => CreateEpic::route('/create'),
            'view' => ViewEpic::route('/{record}'),
            'edit' => EditEpic::route('/{record}/edit'),
        ];
    }
}
