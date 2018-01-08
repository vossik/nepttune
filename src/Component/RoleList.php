<?php

namespace Peldax\NetteInit\Component;

use \Ublaboo\DataGrid\DataGrid;

final class RoleList extends BaseListComponent
{
    const INLINE = 0;

    public function __construct(\Peldax\NetteInit\Model\RoleModel $roleModel)
    {
        $this->repository = $roleModel;
    }

    protected function modifyList(DataGrid $grid) : DataGrid
    {
        $grid->addColumnText('username', 'Přihlašovací jméno')
            ->setSortable();

        $grid->addToolbarButton(':Admin:User:add', 'Přidat');

        return $grid;
    }
}