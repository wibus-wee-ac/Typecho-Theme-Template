###
 # @FilePath: /Typecho-Theme-Template/create.sh
 # @author: Wibus
 # @Date: 2021-08-24 12:19:40
 # @LastEditors: Wibus
 # @LastEditTime: 2021-08-24 15:33:26
 # Coding With IU
### 

clear
echo "暂时不提供使用！"
exit

cd $dir
touch index.php
touch functions.php
touch configs.php
touch header.php
touch footer.php
touch archieves.php
mkdir libs
mkdir system
mkdir assets
cd assets
mkdir css js img
cd .
cd ..
touch post.php
touch page.php
mkdir components
cd components 
touch comments.php
cd ..
echo "
<?php
/**
 * 主题描述
 * 
 * @package custom
 * @author 你的名字
 * @version 版本号
 * @link 博客链接
 */
?>
" > index.php
echo "
<?php
require('config.php');
?>
" > functions.php