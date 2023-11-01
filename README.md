# magento2-head-additional-before
Allows you to place layout blocks in the &lt;head&gt; tag before other scripts

## Example usage:

```
<referenceBlock name="head.additional.before">
    <block class="Magento\Framework\View\Element\Template" name="termly" template="Vendor_Module::template.phtml" />
</referenceBlock>
```
