# Scandinavian Stroke Scale (SSS) - Leg lift - KIP Infrastructure v2.17.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Scandinavian Stroke Scale (SSS) - Leg lift**

## CodeSystem: Scandinavian Stroke Scale (SSS) - Leg lift 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/SSSLegLift | *Version*:2.17.1 |
| Active as of 2022-06-23 | *Computable Name*:SSSLegLift |

 
Scandinavian Stroke Scale (SSS) - Leg lift: Vurderes på begge ben, men der noteres kun i forhold til siden for en eventuel lammelse 

 This Code system is referenced in the content logical definition of the following value sets: 

* [SSSBenloeft](ValueSet-SSSBenloeft.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "SSSLegLift",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/SSSLegLift",
  "version" : "2.17.1",
  "name" : "SSSLegLift",
  "title" : "Scandinavian Stroke Scale (SSS) - Leg lift",
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
  "description" : "Scandinavian Stroke Scale (SSS) - Leg lift: Vurderes på begge ben, men der noteres kun i forhold til siden for en eventuel lammelse",
  "content" : "complete",
  "count" : 5,
  "concept" : [
    {
      "code" : "6",
      "display" : "6",
      "definition" : "Løfter ben med normal kraft"
    },
    {
      "code" : "5",
      "display" : "5",
      "definition" : "Løfter strakt ben med nedsat kraft"
    },
    {
      "code" : "4",
      "display" : "4",
      "definition" : "Løfter arm med fleksion af knæ"
    },
    {
      "code" : "2",
      "display" : "2",
      "definition" : "Bevæger benet men ikke mod tyngden"
    },
    {
      "code" : "0",
      "display" : "0",
      "definition" : "Paralyse: Ingen bevægelse mulig."
    }
  ]
}

```
