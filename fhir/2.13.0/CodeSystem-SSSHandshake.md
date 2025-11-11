# Scandinavian Stroke Scale (SSS) - Handshake - KIP Infrastructure v2.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Scandinavian Stroke Scale (SSS) - Handshake**

## CodeSystem: Scandinavian Stroke Scale (SSS) - Handshake 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/SSSHandshake | *Version*:2.13.0 |
| Active as of 2022-06-23 | *Computable Name*:SSSHandshake |

 
Scandinavian Stroke Scale (SSS) - Handshake: Vurderes på begge hænder, men der noteres kun i forhold til siden af en eventuel lammelse 

 This Code system is referenced in the content logical definition of the following value sets: 

* [SSSHaandtryk](ValueSet-SSSHaandtryk.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "SSSHandshake",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/SSSHandshake",
  "version" : "2.13.0",
  "name" : "SSSHandshake",
  "title" : "Scandinavian Stroke Scale (SSS) - Handshake",
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
  "description" : "Scandinavian Stroke Scale (SSS) - Handshake: Vurderes på begge hænder, men der noteres kun i forhold til siden af en eventuel lammelse",
  "content" : "complete",
  "count" : 4,
  "concept" : [
    {
      "code" : "6",
      "display" : "6",
      "definition" : "Normal kraft for bevægelsen."
    },
    {
      "code" : "4",
      "display" : "4",
      "definition" : "Normal bevægelse, men nedsat kraft."
    },
    {
      "code" : "2",
      "display" : "2",
      "definition" : "Nogen bevægelse, kan ikke knytte hånden."
    },
    {
      "code" : "0",
      "display" : "0",
      "definition" : "Paralyse: Ingen bevægelse mulig."
    }
  ]
}

```
