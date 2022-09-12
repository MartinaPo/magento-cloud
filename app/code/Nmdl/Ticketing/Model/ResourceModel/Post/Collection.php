<?php

namespace Nmdl\Ticketing\Model\ResourceModel\Post;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Nmdl\Ticketing\Model\Post as PostModel;
use Nmdl\Ticketing\Model\ResourceModel\Post as PostResourceModel;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(PostModel::class, PostResourceModel::class);
    }
}