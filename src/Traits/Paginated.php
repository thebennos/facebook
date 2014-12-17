<?php
/**
 * Result.php
 */
namespace Facebook\Traits;
use nikic\iter\fn;

trait Paginated
{
    public function pager($page = null)
    {
        $paging = isset($this['paging']) ?: [];
        return fn\index($page)($paging);
    }
}