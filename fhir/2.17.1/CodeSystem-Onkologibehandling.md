# Onkologibehandlinger - KIP Infrastructure v2.17.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Onkologibehandlinger**

## CodeSystem: Onkologibehandlinger 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/Onkologibehandling | *Version*:2.17.1 |
| Active as of 2022-04-28 | *Computable Name*:Onkologibehandling |

 
Typer af onkologibehandlinger 

 This Code system is referenced in the content logical definition of the following value sets: 

* [OnkologibehandlingerAll](ValueSet-OnkologibehandlingerAll.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "Onkologibehandling",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/Onkologibehandling",
  "version" : "2.17.1",
  "name" : "Onkologibehandling",
  "title" : "Onkologibehandlinger",
  "status" : "active",
  "date" : "2022-04-28T00:00:00+02:00",
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
  "description" : "Typer af onkologibehandlinger",
  "content" : "complete",
  "count" : 3,
  "concept" : [
    {
      "code" : "kurativ",
      "display" : "Kurativ",
      "definition" : "Kurativ behandling"
    },
    {
      "code" : "palliativ",
      "display" : "Palliativ",
      "definition" : "Palliativ behandling"
    },
    {
      "code" : "ingen",
      "display" : "Ingen",
      "definition" : "Ingen behandling"
    }
  ]
}

```
