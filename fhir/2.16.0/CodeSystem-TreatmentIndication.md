# Treatment indication - KIP Infrastructure v2.16.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Treatment indication**

## CodeSystem: Treatment indication 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/TreatmentIndication | *Version*:2.16.0 |
| Active as of 2022-07-12 | *Computable Name*:TreatmentIndication |

 
Treatment indication 

 This Code system is referenced in the content logical definition of the following value sets: 

* [IndikationTES](ValueSet-IndikationTES.md)
* [TreatmentIndicationCLL](ValueSet-TreatmentIndicationCLL.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "TreatmentIndication",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/TreatmentIndication",
  "version" : "2.16.0",
  "name" : "TreatmentIndication",
  "title" : "Treatment indication",
  "status" : "active",
  "date" : "2022-07-12T00:00:00+02:00",
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
  "description" : "Treatment indication",
  "content" : "complete",
  "count" : 5,
  "concept" : [
    {
      "code" : "cll",
      "display" : "CLL",
      "definition" : "CLL"
    },
    {
      "code" : "autoimmune",
      "display" : "Autoimmune fænomener",
      "definition" : "Autoimmune fænomener"
    },
    {
      "code" : "histological_verified",
      "display" : "Histologisk verificeret",
      "definition" : "Histologisk verificeret"
    },
    {
      "code" : "diagnostic",
      "display" : "Diagnostisk",
      "definition" : "Diagnostisk"
    },
    {
      "code" : "additional_procedure",
      "display" : "Supplerende procedure",
      "definition" : "Supplerende procedure"
    }
  ]
}

```
