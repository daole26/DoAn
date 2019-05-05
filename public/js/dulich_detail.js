//$(document).ready()
window.addEventListener('DOMContentLoaded',function(){
	//dinh dang ngay
	var d = document.getElementById('ngay')
	var m = document.getElementById('thang')
	var y = document.getElementById('nam')
	var day31 = document.getElementById('opt-day-31')
	var day30 = document.getElementById('opt-day-30')
	var day29 = document.getElementById('opt-day-29')
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
		if(thang!=''&& nam!=''){
			if(_31days.includes(thang)){
				if(d.childElementCount==29){
					d.appendChild(day29)
				}
				if(d.childElementCount==30){
					d.appendChild(day30)
				}
				if(d.childElementCount==31)
					d.appendChild(day31)
			}else{
				if(d.childElementCount==29){
					d.appendChild(day29)
				}
				if(d.childElementCount==30){
					d.appendChild(day30)
				}
				if(d.childElementCount==32){
					day31.remove();
				}
				if(thang==2){
					day30.remove();
					day29.remove();
					if(isLeapYear(nam)){
						if(d.childElementCount==29){
							d.appendChild(day29)
						}
					}
				}
			}
			
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