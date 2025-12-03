# Economic support - KIP Infrastructure v2.15.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Economic support**

## CodeSystem: Economic support 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/EconomicSupport | *Version*:2.15.0 |
| Active as of 2022-09-30 | *Computable Name*:EconomicSupport |

 
Economic support 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ForsoergelsesgrundlagRETSPSYK](ValueSet-ForsoergelsesgrundlagRETSPSYK.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "EconomicSupport",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/EconomicSupport",
  "version" : "2.15.0",
  "name" : "EconomicSupport",
  "title" : "Economic support",
  "status" : "active",
  "date" : "2022-09-30T00:00:00+02:00",
  "publisher" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
  "contact" : [
    {
      "name" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://trifork.com"
        },
        {
          "system" : "email",
          "value" : "rbk@trifork.com"
        }
      ]
    }
  ],
  "description" : "Economic support",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 4,
  "concept" : [
    {
      "code" : "salary",
      "display" : "Salary",
      "definition" : "Salary / Lønindkomst"
    },
    {
      "code" : "education_support",
      "display" : "Education support",
      "definition" : "Education support / Uddannelsesstøtte"
    },
    {
      "code" : "cash_assistance",
      "display" : "Cash assistance",
      "definition" : "Cash assistance / Kontanthjælp"
    },
    {
      "code" : "pension",
      "display" : "Pension",
      "definition" : "Pension"
    }
  ]
}

```
