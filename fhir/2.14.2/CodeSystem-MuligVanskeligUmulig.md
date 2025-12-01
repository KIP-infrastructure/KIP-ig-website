# Mulig-Vanskelig-Umulig - KIP Infrastructure v2.14.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Mulig-Vanskelig-Umulig**

## CodeSystem: Mulig-Vanskelig-Umulig 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/MuligVanskeligUmulig | *Version*:2.14.2 |
| Active as of 2022-06-09 | *Computable Name*:MuligVanskeligUmulig |

 
Vurdering af behandling 

 This Code system is referenced in the content logical definition of the following value sets: 

* [MuligVanskeligUmulig](ValueSet-MuligVanskeligUmulig.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "MuligVanskeligUmulig",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/MuligVanskeligUmulig",
  "version" : "2.14.2",
  "name" : "MuligVanskeligUmulig",
  "title" : "Mulig-Vanskelig-Umulig",
  "status" : "active",
  "date" : "2022-06-09T00:00:00+02:00",
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
  "description" : "Vurdering af behandling",
  "content" : "complete",
  "count" : 3,
  "concept" : [
    {
      "code" : "mulig",
      "display" : "Mulig",
      "definition" : "Behandlingen er mulig"
    },
    {
      "code" : "vanskelig",
      "display" : "Vanskelig",
      "definition" : "Behandlingen er vanskelig men mulig"
    },
    {
      "code" : "umulig",
      "display" : "Umulig",
      "definition" : "Behandlingen er ikke mulig"
    }
  ]
}

```
