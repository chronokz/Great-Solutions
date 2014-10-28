# Convert Integer to String with space for thousands
# 10000000 -> 10 000 000

price_format = (amount) ->
	amount_string = '' + amount
	result = ''
	i = 0
	n = amount_string.length % 3
	while i < amount_string.length
		if n % 3 == 0
			result += ' '
		result += amount_string[i]
		n--
		i++
	result.trim()