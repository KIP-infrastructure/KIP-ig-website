# Relaksation til intubation - KIP Infrastructure v2.14.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Relaksation til intubation**

## CodeSystem: Relaksation til intubation 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/IntubationRelaks | *Version*:2.14.0 |
| Active as of 2022-06-09 | *Computable Name*:IntubationRelaks |

 
Relaksation til intubation 

 This Code system is referenced in the content logical definition of the following value sets: 

* [IntubationRelaks](ValueSet-IntubationRelaks.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "IntubationRelaks",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/IntubationRelaks",
  "version" : "2.14.0",
  "name" : "IntubationRelaks",
  "title" : "Relaksation til intubation",
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
  "description" : "Relaksation til intubation",
  "content" : "complete",
  "count" : 2,
  "concept" : [
    {
      "code" : "depolar",
      "display" : "Depolarising",
      "definition" : "Depolariserende"
    },
    {
      "code" : "non_depolar",
      "display" : "Non-depolarising",
      "definition" : "Non-depolariserende"
    }
  ]
}

```
