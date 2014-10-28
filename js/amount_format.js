// Convert String with space to Integer
// 10 0000 00 -> 10000000

function amount_format(price) {
	var value;
	value = price.replace(' ', '');
	return parseInt(value || 0);
}