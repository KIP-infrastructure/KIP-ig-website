# Ikke besvaret (MDS) - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Ikke besvaret (MDS)**

## ValueSet: Ikke besvaret (MDS) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/IkkeBesvaret | *Version*:2.27.2 |
| Active as of 2022-10-19 | *Computable Name*:IkkeBesvaret |

 
Årsager til ikke-besvaret spørgsmål (MDS) 

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
  "id" : "IkkeBesvaret",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/IkkeBesvaret",
  "version" : "2.27.2",
  "name" : "IkkeBesvaret",
  "title" : "Ikke besvaret (MDS)",
  "status" : "active",
  "date" : "2022-10-19T00:00:00+02:00",
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
  "description" : "Årsager til ikke-besvaret spørgsmål (MDS)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/IkkeBesvaret",
      "concept" : [{
        "code" : "ej_tilg",
        "display" : "Data kan ikke fremskaffes"
      },
      {
        "code" : "na",
        "display" : "Ikke relevant"
      },
      {
        "code" : "ej_udt",
        "display" : "Svarmuligheder er ikke udtømmende"
      }]
    }]
  }
}

```
