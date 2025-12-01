# Target of the radiation therapy - KIP Infrastructure v2.14.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Target of the radiation therapy**

## CodeSystem: Target of the radiation therapy 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/RadiationTherapyTarget | *Version*:2.14.2 |
| Active as of 2022-06-17 | *Computable Name*:RadiationTherapyTarget |

 
Target of the radiation therapy 

 This Code system is referenced in the content logical definition of the following value sets: 

* [StraalebehandlingMaal](ValueSet-StraalebehandlingMaal.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "RadiationTherapyTarget",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/RadiationTherapyTarget",
  "version" : "2.14.2",
  "name" : "RadiationTherapyTarget",
  "title" : "Target of the radiation therapy",
  "status" : "active",
  "date" : "2022-06-17T00:00:00+02:00",
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
  "description" : "Target of the radiation therapy",
  "content" : "complete",
  "count" : 4,
  "concept" : [
    {
      "code" : "primarytumor",
      "display" : "Primary tumor",
      "definition" : "Primary tumor"
    },
    {
      "code" : "bonemetastases",
      "display" : "Bone metastases",
      "definition" : "Bone metastases"
    },
    {
      "code" : "cns",
      "display" : "CNS",
      "definition" : "Central nervous system (CNS)"
    },
    {
      "code" : "other",
      "display" : "Other/non-specified",
      "definition" : "Other target/non-specified target"
    }
  ]
}

```
