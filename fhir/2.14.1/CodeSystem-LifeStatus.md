# Liv Status - KIP Infrastructure v2.14.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Liv Status**

## CodeSystem: Liv Status 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/LifeStatus | *Version*:2.14.1 |
| Active as of 2022-06-22 | *Computable Name*:LifeStatus |

 
Patientens status ved udskrivelse 

 This Code system is referenced in the content logical definition of the following value sets: 

* [LifeStatus](ValueSet-LifeStatus.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "LifeStatus",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/LifeStatus",
  "version" : "2.14.1",
  "name" : "LifeStatus",
  "title" : "Liv Status",
  "status" : "active",
  "date" : "2022-06-22T00:00:00+02:00",
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
  "description" : "Patientens status ved udskrivelse",
  "content" : "complete",
  "count" : 2,
  "concept" : [
    {
      "code" : "alive",
      "display" : "Levende",
      "definition" : "Patienten udskrives levende"
    },
    {
      "code" : "dead",
      "display" : "Palliativ",
      "definition" : "Patienten udskrives død"
    }
  ]
}

```
