import { ref, reactive, toRefs } from '@vue/composition-api'

export function useErrorBags() {

  const hasErrors = (bag)=>$page.errorBags[bag] && Object.keys($page.errorBags[bag]).length > 0
  const errorFor = (key, bag = 'default')=>{
    if (!hasErrors(bag) || !$page.errorBags[bag][key] || $page.errorBags[bag][key].length == 0) {
      return;
    }
    return $page.errorBags[bag][key][0];
  }

  return {hasErrors, errorFor };
}