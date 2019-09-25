<?php

namespace Yjtec\Lincache\Cache;

/**
 *
 * @author Administrator
 */
interface Intf {

    public function get($key);

    public function set($key, $val, $expire = null);

    public function remove($key = null);
}
