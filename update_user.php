<?php
header('Content-Type: application/json');
$file = __DIR__ . '/../users.json';
if(!file_exists($file)){ echo json_encode(['success'=>false,'message'=>'No file']); exit; }
$id = $_POST['id'] ?? '';
$action = $_POST['action'] ?? '';
$data = json_decode(file_get_contents($file), true);
foreach($data as &$u){
  if($u['id']===$id){
    if($action==='allow'){ $u['status']='allowed'; $u['allowed']=true; }
    elseif($action==='deny'){ $u['status']='denied'; $u['allowed']=false; }
    elseif($action==='kill'){ $u['status']='killed'; $u['allowed']=false; }
  }
}
file_put_contents($file, json_encode($data, JSON_PRETTY_PRINT));
echo json_encode(['success'=>true]);
