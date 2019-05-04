//$(document).ready()
window.addEventListener('DOMContentLoaded',function(){
	//dinh dang ngay
	var d = document.getElementById('ngay')
	var m = document.getElementById('thang')
	var y = document.getElementById('nam')
	var _31days=['1','3','5','7','8','10','12']
	var isLeapYear = function(year){
		if(!(year % 100)){
			if(!(year % 400)){
				return true
			}
		}else if(!(year % 4)){
			return true
		}
		return false
	}
	var format = function(){
		thang = m.value
		nam = y.value
		days = 30
		d_innerText = ''
		if(thang!=''&& nam!=''){
			if(_31days.includes(thang)){
				days=31
			}else{
				if(thang==2){
					if(isLeapYear(nam)){
						days=29
					}else{
						days=28
					}
				}
			}
			
		}
		d_innerText = '<option value="">Ngày</option>'
		for(var i=1;i<=days;i++){
			d_innerText += '<option value="'+i+'" >'+i+'</option>'
			d.innerHTML =d_innerText
		}
	}
	format()
	m.addEventListener('change',format)
	y.addEventListener('change',format)
	
	// tinh gia tien
	var price = document.getElementsByClassName('tour_price')
	var nguoilon = document.getElementById('nl')
	var trenho = document.getElementById('trnho')
	var dongia= price[0].innerText

	var getNumber = function(buff){
		len=buff.length
		num = 0
		for(var i =0;i<len;i++){
			if(buff[i]!=' '){
				if(!isNaN(buff[i])){
					num*=10
					num+=Number(buff[i])
				}
			}
		}
		return num
	}
	var convertToPriceFormat = function(buff){
		str = String(buff)
		var stack=''
		var isFload=str.includes(',')
		if(isFload){
			var j=-1
		}else{
			var j = 0
		}
		for(var i = str.length-1;i>=0;i--){
			stack += str[i]
			if(str[i]==',') j=0
			if(j>=0){
				j++
				if(!(j%3)){
					stack+='.'
				}
			}
		}
		str = ''
		for(var i=stack.length-1;i>=0;i--){
			if(i==stack.length-1 && stack[i]=='.') continue;
			str+=stack[i]
		}
		return str
	}
	dongia =getNumber(dongia)
	var tinhtien = function(){
		var nl = (nguoilon.value!='')? nguoilon.value:0
		var trnh = (trenho.value!='')? trenho.value:0
		var thanhtien = dongia*nl+dongia*trnh/2
		price[1].innerText = convertToPriceFormat(thanhtien)
	}
	trenho.addEventListener('change',tinhtien)
	nguoilon.addEventListener('change',tinhtien)
})