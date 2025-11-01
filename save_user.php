<?php
header('Content-Type: application/json');
$file = __DIR__ . '/../users.json';
$nama = $_POST['nama'] ?? '';
$kata = $_POST['kata'] ?? '';
if(!$nama || !$kata){
  echo json_encode(['success'=>false,'message'=>'Data kosong']); exit;
}
$users = file_exists($file) ? json_decode(file_get_contents($file), true) : [];
$id = uniqid();
$users[] = [
  'id'=>$id,
  'nama'=>$nama,
  'kata'=>$kata,
  'status'=>'pending',
  'allowed'=>false,
  'time'=>date('Y-m-d H:i:s')
];
file_put_contents($file, json_encode($users, JSON_PRETTY_PRINT));
echo json_encode(['success'=>true]);
