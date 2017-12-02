Hellow {{$user->name}}
Thank you for cofirm your account.Please verify your email using this link :
{{route('verify',$user->verificatoin_token)}}
