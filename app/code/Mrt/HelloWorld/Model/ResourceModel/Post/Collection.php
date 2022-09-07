<?php

namespace Gemma\Database\Model\ResourceModel\Post;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Gemma\Database\Model\Post as PostModel;
use Gemma\Database\Model\ResourceModel\Post as PostResourceModel;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(PostModel::class, PostResourceModel::class);
    }
}