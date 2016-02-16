<?php
  function smarty_block_test2($params, $content)
  {
    $replace = $params['replace'];
    $maxnum = $params['maxnum'];

    if($replace == 'true')
    {
      $content = str_replace('a', 'b', $content);
    }

    $content = substr($content, 0, $maxnum);
    return $content;
  }
?>