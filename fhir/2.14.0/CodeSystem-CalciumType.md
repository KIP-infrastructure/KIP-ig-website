# Calcium type - KIP Infrastructure v2.14.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Calcium type**

## CodeSystem: Calcium type 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/CalciumType | *Version*:2.14.0 |
| Active as of 2022-10-04 | *Computable Name*:CalciumType |

 
Calcium type 

 This Code system is referenced in the content logical definition of the following value sets: 

* [MaalingCalcium](ValueSet-MaalingCalcium.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "CalciumType",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/CalciumType",
  "version" : "2.14.0",
  "name" : "CalciumType",
  "title" : "Calcium type",
  "status" : "active",
  "date" : "2022-10-04T00:00:00+02:00",
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
  "description" : "Calcium type",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 2,
  "concept" : [
    {
      "code" : "albumin_corrected",
      "display" : "Albumin corrected",
      "definition" : "Albumin corrected / Albuminkorrigeret"
    },
    {
      "code" : "ionized",
      "display" : "Ionized",
      "definition" : "Ionized / Ioniseret"
    }
  ]
}

```
