<?php
function print_error()
{
  echo "ERROR\n";
  exit;
}
if (!isset($_POST["login"]) || !isset($_POST["passwd"]))
  print_error();
if (!$_POST["login"] || !$_POST["passwd"])
  print_error();
if (isset($_POST['submit']) && $_POST['submit'] == "OK")
{
  $dir="../private";
  $filename=$dir."/passwd";
  $new_elem["login"]=$_POST["login"];
  $new_elem["passwd"]=hash("whirlpool",$_POST["passwd"]);
  $tabsecurite[]=$new_elem;
  if (!file_exists($dir))
  {
    mkdir($dir);
  }
  if (!file_exists($filename))
  {
    $str=serialize($tabsecurite);
    file_put_contents($filename,$str);
    echo "OK\n";
  }
  else
  {
    $tabsecurite=unserialize(file_get_contents($filename));
    foreach ($tabsecurite as $element)
    {
      if ($element['login'] === $_POST['login'])
      {
        print_error();
      }
    }
    $tabsecurite[]=$new_elem;
    $str=serialize($tabsecurite);
    file_put_contents($filename,$str);
    echo "OK\n";
  }
}
else
{
  print_error();
}
?>