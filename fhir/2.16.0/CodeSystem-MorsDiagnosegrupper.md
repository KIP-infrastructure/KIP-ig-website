# Mors Diagnosegrupper (DNSL) - KIP Infrastructure v2.16.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Mors Diagnosegrupper (DNSL)**

## CodeSystem: Mors Diagnosegrupper (DNSL) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/MorsDiagnosegrupper | *Version*:2.16.0 |
| Active as of 2024-01-10 | *Computable Name*:MorsDiagnosegrupper |

 
Mors Diagnosegrupper (DNSL) 

 This Code system is referenced in the content logical definition of the following value sets: 

* [MorsDiagnosegrupper](ValueSet-MorsDiagnosegrupper.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "MorsDiagnosegrupper",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/MorsDiagnosegrupper",
  "version" : "2.16.0",
  "name" : "MorsDiagnosegrupper",
  "title" : "Mors Diagnosegrupper (DNSL)",
  "status" : "active",
  "date" : "2024-01-10T00:00:00+02:00",
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
  "description" : "Mors Diagnosegrupper (DNSL)",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 6,
  "concept" : [
    {
      "code" : "infektion",
      "display" : "Infektioner"
    },
    {
      "code" : "kardinal",
      "display" : "Kardiale årsager"
    },
    {
      "code" : "Lever",
      "display" : "Leverlidelser"
    },
    {
      "code" : "social",
      "display" : "Socialt"
    },
    {
      "code" : "ulykker",
      "display" : "Ulykke"
    },
    {
      "code" : "vaskulaer",
      "display" : "Vaskulære årsager"
    }
  ]
}

```
