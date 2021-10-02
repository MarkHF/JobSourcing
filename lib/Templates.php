<?php class Template{
    // Template path
    protected $template;
    // Variable pass in
    protected $vars;
    //Constructor
    public function _construct($template){
        $this->template = $template;
    }

    public function _get($key){
        return $this->vars[$key];
    }

    public function _set($key,$value){
        $this->vars[$key] = $value;
    }

    public function _toString(){
        extract($this->vars);
        chdir(dirname($this->template));
        ob_start();

        include basename($this->template);
        return ob_get_clean();
    }
}