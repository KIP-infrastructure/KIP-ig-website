# Surgical attire, during operations - KIP Infrastructure v2.14.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Surgical attire, during operations**

## CodeSystem: Surgical attire, during operations 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/SurgicalAttire | *Version*:2.14.0 |
| Active as of 2022-07-04 | *Computable Name*:SurgicalAttire |

 
Surgical attire, during operations 

 This Code system is referenced in the content logical definition of the following value sets: 

* [OperationspaaklaedningDHR](ValueSet-OperationspaaklaedningDHR.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "SurgicalAttire",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/SurgicalAttire",
  "version" : "2.14.0",
  "name" : "SurgicalAttire",
  "title" : "Surgical attire, during operations",
  "status" : "active",
  "date" : "2022-07-04T00:00:00+02:00",
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
  "description" : "Surgical attire, during operations",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 3,
  "concept" : [
    {
      "code" : "helmet",
      "display" : "Helmet",
      "definition" : "Helmet",
      "concept" : [
        {
          "code" : "with_venting",
          "display" : "Helmet with venting",
          "definition" : "Helmet with venting"
        },
        {
          "code" : "without_venting",
          "display" : "Helmet without venting",
          "definition" : "Helmet without venting"
        }
      ]
    }
  ]
}

```
