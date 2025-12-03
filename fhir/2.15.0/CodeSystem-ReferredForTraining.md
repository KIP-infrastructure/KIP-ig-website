# Specifikation of where the paitent is referred to for physical training - KIP Infrastructure v2.15.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Specifikation of where the paitent is referred to for physical training**

## CodeSystem: Specifikation of where the paitent is referred to for physical training 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/ReferredForTraining | *Version*:2.15.0 |
| Active as of 2022-06-03 | *Computable Name*:ReferredForTraining |

 
Uddybning af hvor patienten er henvist til fysisk træning 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ReferredForTraining](ValueSet-ReferredForTraining.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ReferredForTraining",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/ReferredForTraining",
  "version" : "2.15.0",
  "name" : "ReferredForTraining",
  "title" : "Specifikation of where the paitent is referred to for physical training",
  "status" : "active",
  "date" : "2022-06-03T00:00:00+02:00",
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
  "description" : "Uddybning af hvor patienten er henvist til fysisk træning",
  "content" : "complete",
  "count" : 2,
  "concept" : [
    {
      "code" : "hospitalregi",
      "display" : "Henvist til superviseret fysisk træning i hospitalsregi",
      "definition" : "Henvist til superviseret fysisk træning i hospitalsregi"
    },
    {
      "code" : "kommunaltregi",
      "display" : "Henvist til superviseret fysisk træning i kommunalt regi",
      "definition" : "envist til superviseret fysisk træning i kommunalt regi"
    }
  ]
}

```
