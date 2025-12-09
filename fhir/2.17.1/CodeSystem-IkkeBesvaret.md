# Ikke besvaret - KIP Infrastructure v2.17.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Ikke besvaret**

## CodeSystem: Ikke besvaret 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/IkkeBesvaret | *Version*:2.17.1 |
| Active as of 2022-10-19 | *Computable Name*:IkkeBesvaret |

 
Årsager til ikke-besvaret spørgsmål 

 This Code system is referenced in the content logical definition of the following value sets: 

* [IkkeBesvaret](ValueSet-IkkeBesvaret.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "IkkeBesvaret",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/IkkeBesvaret",
  "version" : "2.17.1",
  "name" : "IkkeBesvaret",
  "title" : "Ikke besvaret",
  "status" : "active",
  "date" : "2022-10-19T00:00:00+02:00",
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
  "description" : "Årsager til ikke-besvaret spørgsmål",
  "content" : "complete",
  "count" : 3,
  "concept" : [
    {
      "code" : "ej_tilg",
      "display" : "Ikke tilgængelig",
      "definition" : "Data ikke tilgængelig"
    },
    {
      "code" : "ej_udt",
      "display" : "Ikke udtømmende",
      "definition" : "Svarmuligheder er ikke udtømmende"
    },
    {
      "code" : "na",
      "display" : "ikke relevant",
      "definition" : "Ikke relevant"
    }
  ]
}

```
