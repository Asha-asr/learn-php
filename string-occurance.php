<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$str = "mhkkkkrtrrr";
$length = strlen($str);
$count = 1;
$result = "";
for($i=0;$i<$length;$i++)
{
    
    if($i!=$length-1)
    {
        
        if($str[$i] == $str[$i+1] )
        {
            $count++; 
        } else
        {
            if($count==1)
            {
                $result.=$str[$i];
                continue;
            }
            $result.= $count.$str[$i];
            $count = 1;
        }          
    }elseif($count==1)
    {
        
        $result.=$str[$i];
    }else
    {
        $result.= $count.$str[$i];
    }   
}
 echo $result;
 ?>    
</body>
</html>
