# Treatment sufficient - KIP Infrastructure v2.14.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Treatment sufficient**

## CodeSystem: Treatment sufficient 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/TreatmentSufficient | *Version*:2.14.1 |
| Active as of 2022-06-29 | *Computable Name*:TreatmentSufficient |

 
Treatment sufficient 

 This Code system is referenced in the content logical definition of the following value sets: 

* [BehandlingTilstraekkelig](ValueSet-BehandlingTilstraekkelig.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "TreatmentSufficient",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/TreatmentSufficient",
  "version" : "2.14.1",
  "name" : "TreatmentSufficient",
  "title" : "Treatment sufficient",
  "status" : "active",
  "date" : "2022-06-29T00:00:00+02:00",
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
  "description" : "Treatment sufficient",
  "content" : "complete",
  "count" : 2,
  "concept" : [
    {
      "code" : "insufficient",
      "display" : "Insufficient treatment",
      "definition" : "Insufficient treatment"
    },
    {
      "code" : "sufficient",
      "display" : "Sufficient treatment",
      "definition" : "Sufficient treatment"
    }
  ]
}

```
