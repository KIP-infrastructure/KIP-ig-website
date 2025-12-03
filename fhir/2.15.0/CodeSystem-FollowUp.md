# Opfølgning - intervaller - KIP Infrastructure v2.15.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Opfølgning - intervaller**

## CodeSystem: Opfølgning - intervaller 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/FollowUp | *Version*:2.15.0 |
| Active as of 2023-07-03 | *Computable Name*:FollowUp |

 
Opfølgningsperiode, dage, uger, måneder, år 

 This Code system is referenced in the content logical definition of the following value sets: 

* [FollowUp25Y](ValueSet-FollowUp25Y.md)
* [Hyppighed](ValueSet-Hyppighed.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "FollowUp",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/FollowUp",
  "version" : "2.15.0",
  "name" : "FollowUp",
  "title" : "Opfølgning - intervaller",
  "status" : "active",
  "date" : "2023-07-03T00:00:00+02:00",
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
  "description" : "Opfølgningsperiode, dage, uger, måneder, år",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 5,
  "concept" : [
    {
      "code" : "aar_1",
      "display" : "1 year",
      "definition" : "1 år"
    },
    {
      "code" : "aar_2",
      "display" : "2 year",
      "definition" : "2 år"
    },
    {
      "code" : "aar_3",
      "display" : "3 year",
      "definition" : "3 år"
    },
    {
      "code" : "aar_5",
      "display" : "5 year",
      "definition" : "5 år"
    },
    {
      "code" : "aar_10",
      "display" : "10 year",
      "definition" : "10 år"
    }
  ]
}

```
