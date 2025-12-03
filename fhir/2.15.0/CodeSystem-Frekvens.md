# Frekvens - KIP Infrastructure v2.15.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Frekvens**

## CodeSystem: Frekvens 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/Frekvens | *Version*:2.15.0 |
| Active as of 2024-02-13 | *Computable Name*:Frekvens |

 
Frekvens for hvor ofte en given hændelse optræder 

 This Code system is referenced in the content logical definition of the following value sets: 

* [FrekvensLaekDUGA](ValueSet-FrekvensLaekDUGA.md)
* [FrekvensNedsynkningDUGA](ValueSet-FrekvensNedsynkningDUGA.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "Frekvens",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/Frekvens",
  "version" : "2.15.0",
  "name" : "Frekvens",
  "title" : "Frekvens",
  "status" : "active",
  "date" : "2024-02-13T00:00:00+02:00",
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
  "description" : "Frekvens for hvor ofte en given hændelse optræder",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 10,
  "concept" : [
    {
      "code" : "aldrig",
      "display" : "Aldrig",
      "definition" : "Aldrig / Slet ikke"
    },
    {
      "code" : "konstant",
      "display" : "Konstant",
      "definition" : "Hele tiden"
    },
    {
      "code" : "dgl-lt1",
      "display" : "Mindre end 1 gang om dagen",
      "definition" : "Mindre end 1 gang om dagen"
    },
    {
      "code" : "dgl-1",
      "display" : "1 gang om dagen",
      "definition" : "1 gang om dagen"
    },
    {
      "code" : "dgl-ge1",
      "display" : "1 eller flere gange om dagen",
      "definition" : "1 eller flere gange om dagen"
    },
    {
      "code" : "ugl-le1",
      "display" : "1 gang om ugen eller mindre",
      "definition" : "1 gang om ugen eller mindre"
    },
    {
      "code" : "ugl-ge1",
      "display" : "1 gang om ugen eller mere",
      "definition" : "1 gang om ugen eller mere"
    },
    {
      "code" : "ugl-2-3",
      "display" : "2-3 gange om ugen",
      "definition" : "2-3 gange om ugen"
    },
    {
      "code" : "mdl-lt1",
      "display" : "Mindre end 1 gang om måneden",
      "definition" : "Mindre end 1 gang om måneden"
    },
    {
      "code" : "mdl-1-4",
      "display" : "1-4 gange om måneden",
      "definition" : "1-4 gange om måneden"
    }
  ]
}

```
