<?php
class Format{
    public function formatDate($date){
    return date('Fj,Y, g:i a', strtotime($date));
    }

    public function textShorten($text, $limit = 400){
        $text = $text." ";
        $text = substr($text, 0, $limit);
        $text = substr($text, 0, strrpos($text,' '));
        $text = $text.".....";
        return $text;
    }

    public function validation($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    public function title(){
        $path = $_SERVER['SCRIPT_FILENAME'];
        $title = basename($path, '');
        //$title = str_replace('_','', $title);
        if ($title == 'index') {
        $title = 'home';;
        }elseif ($title == 'setting') {
        $title = 'setting';
        }
        return $title = ucfirst($title);
        }
}
?>