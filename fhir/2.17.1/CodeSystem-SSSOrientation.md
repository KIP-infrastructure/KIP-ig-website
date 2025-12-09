# Scandinavian Stroke Scale (SSS) - Orientation - KIP Infrastructure v2.17.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Scandinavian Stroke Scale (SSS) - Orientation**

## CodeSystem: Scandinavian Stroke Scale (SSS) - Orientation 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/SSSOrientation | *Version*:2.17.1 |
| Active as of 2022-06-23 | *Computable Name*:SSSOrientation |

 
Scandinavian Stroke Scale (SSS) - Orientation: Der spørges, om hvilken måned det er, hvilket hospital patienten er på, og patientens CPR-nr. 

 This Code system is referenced in the content logical definition of the following value sets: 

* [SSSOrientering](ValueSet-SSSOrientering.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "SSSOrientation",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/SSSOrientation",
  "version" : "2.17.1",
  "name" : "SSSOrientation",
  "title" : "Scandinavian Stroke Scale (SSS) - Orientation",
  "status" : "active",
  "date" : "2022-06-23T00:00:00+02:00",
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
  "description" : "Scandinavian Stroke Scale (SSS) - Orientation: Der spørges, om hvilken måned det er, hvilket hospital patienten er på, og patientens CPR-nr.",
  "content" : "complete",
  "count" : 4,
  "concept" : [
    {
      "code" : "6",
      "display" : "6",
      "definition" : "3 korrekte svar."
    },
    {
      "code" : "4",
      "display" : "4",
      "definition" : "2 af 3 svar korrekte."
    },
    {
      "code" : "2",
      "display" : "2",
      "definition" : "1 af 3 svar korrekte."
    },
    {
      "code" : "0",
      "display" : "0",
      "definition" : "Ingen korrekte svar."
    }
  ]
}

```
