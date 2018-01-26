Hellow {{$user->name}}
Thank you for create account.Please verify your email using this link :
{{route('verify',$user->verificatoin_token)}}
