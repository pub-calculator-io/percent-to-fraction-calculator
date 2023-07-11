function calculate(){
  // 1. init & validate
  const percentage = input.get('percentage').number().raw();
  if(!input.valid()) return;

  // 2. calculate
  const fracPart = percentage.split('.')[1];
  const multiplier = fracPart ? math.pow(10, fracPart.length) : 1;
  const result = math.fraction(percentage * multiplier, 100 * multiplier);
  
  // 3. output
  Fractions.outputMixed(result, 'result');
}  
