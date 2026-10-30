# Lokalitet DANARREST - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Lokalitet DANARREST**

## ValueSet: Lokalitet DANARREST 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/LokalitetDANARREST | *Version*:2.27.1 |
| Active as of 2022-06-29 | *Computable Name*:LokalitetDANARREST |

 
Lokalitet DANARREST 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "LokalitetDANARREST",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/LokalitetDANARREST",
  "version" : "2.27.1",
  "name" : "LokalitetDANARREST",
  "title" : "Lokalitet DANARREST",
  "status" : "active",
  "date" : "2022-06-29T00:00:00+02:00",
  "publisher" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
  "contact" : [{
    "name" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
    "telecom" : [{
      "system" : "url",
      "value" : "https://trifork.com"
    },
    {
      "system" : "email",
      "value" : "rbk@trifork.com"
    }]
  }],
  "description" : "Lokalitet DANARREST",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Observationssted",
      "concept" : [{
        "code" : "akutmodt",
        "display" : "Akutmodtagelse"
      },
      {
        "code" : "ambulat",
        "display" : "Ambulatorium"
      },
      {
        "code" : "sengeafd",
        "display" : "Sengeafdeling"
      },
      {
        "code" : "opergang",
        "display" : "Operationsgang"
      },
      {
        "code" : "opvaagn",
        "display" : "Opvågningsafdeling"
      },
      {
        "code" : "intensiv",
        "display" : "Intensivafdeling"
      },
      {
        "code" : "kardio_lab",
        "display" : "Kardiologisk laboratorium"
      },
      {
        "code" : "neonatal",
        "display" : "Neonatalafdeling"
      },
      {
        "code" : "andet",
        "display" : "Andet"
      }]
    }]
  }
}

```
