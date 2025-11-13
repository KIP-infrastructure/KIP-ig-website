# Current treatment (if any) of medical blood thinners - KIP Infrastructure v2.14.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Current treatment (if any) of medical blood thinners**

## CodeSystem: Current treatment (if any) of medical blood thinners 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/BloodThinnersTreatment | *Version*:2.14.0 |
| Active as of 2022-06-28 | *Computable Name*:BloodThinnersTreatment |

 
Current treatment (if any) of medical blood thinners 

 This Code system is referenced in the content logical definition of the following value sets: 

* [BlodfortyndendeMedicin](ValueSet-BlodfortyndendeMedicin.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "BloodThinnersTreatment",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/BloodThinnersTreatment",
  "version" : "2.14.0",
  "name" : "BloodThinnersTreatment",
  "title" : "Current treatment (if any) of medical blood thinners",
  "status" : "active",
  "date" : "2022-06-28T00:00:00+02:00",
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
  "description" : "Current treatment (if any) of medical blood thinners",
  "content" : "complete",
  "count" : 2,
  "concept" : [
    {
      "code" : "anticoagulant",
      "display" : "Anticoagulant treatment",
      "definition" : "Anticoagulant treatment"
    },
    {
      "code" : "antiplatelet",
      "display" : "Antiplatelet treatment",
      "definition" : "Antiplatelet treatment"
    }
  ]
}

```
