<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
/**
 * 统计代码插件
 * 
 * @package 统计代码插件 
 * @author 虾米菌
 * @version 1.0.0
 * @link https://www.wulalalala.com/
 */
class TongJi_Plugin implements Typecho_Plugin_Interface
{
    /**
     * 激活插件方法,如果激活失败,直接抛出异常
     * 
     * @access public
     * @return void
     * @throws Typecho_Plugin_Exception
     */
    public static function activate(){
		Typecho_Plugin::factory('Widget_Archive')->footer = array('TongJi_Plugin', 'render');
    }
    
    /**
     * 禁用插件方法,如果禁用失败,直接抛出异常
     * 
     * @static
     * @access public
     * @return void
     * @throws Typecho_Plugin_Exception
     */
    public static function deactivate(){
		
	}
    
    /**
     * 获取插件配置面板
     * 
     * @access public
     * @param Typecho_Widget_Helper_Form $form 配置面板
     * @return void
     */
    public static function config(Typecho_Widget_Helper_Form $form){
        $name = new Typecho_Widget_Helper_Form_Element_Textarea ('word', NULL, '', _t('统计代码'));
        $form->addInput($name);
    }
    
    /**
     * 个人用户的配置面板
     * 
     * @access public
     * @param Typecho_Widget_Helper_Form $form
     * @return void
     */
    public static function personalConfig(Typecho_Widget_Helper_Form $form){}
    
    /**
     * 插件实现方法
     * 
     * @access public
     * @return void
     */
    public static function render(){
            echo "<!--统计代码开始-->\n".Typecho_Widget::widget('Widget_Options')->plugin('TongJi')->word."\n<!--统计代码结束-->\n";

    }
}
