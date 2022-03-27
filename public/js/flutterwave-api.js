if(document.getElementById('donate'))
{
	new Payments(
		{
			publicKey: 'FLWPUBK-df942bd2c2335e3cef5b066a422ceb60-X', 
			buttonText: 'Donate Now', 
			formId: 'donate',
			checkBoxText: 'Make my donation public',
			payment: {
				currency: 'UGX',
				country: 'UGANDA',
				initUrl: '/payments/init',
				callback: '/payments/verify'
			},
			app: {
				title: 'SANYU BABIES HOME',
				logo: '/imgs/icons/logo.png'
			},
			csrf: document.querySelector("input[name='_token'").value,
		});
}