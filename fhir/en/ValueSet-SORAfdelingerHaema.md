# SOR: Afdelinger (HÆMA) - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **SOR: Afdelinger (HÆMA)**

## ValueSet: SOR: Afdelinger (HÆMA) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/SORAfdelingerHaema | *Version*:2.27.0 |
| Active as of 2022-11-24 | *Computable Name*:SORAfdelingerHaema |

 
SOR: Afdelinger (HÆMA) 

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
  "id" : "SORAfdelingerHaema",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/SORAfdelingerHaema",
  "version" : "2.27.0",
  "name" : "SORAfdelingerHaema",
  "title" : "SOR: Afdelinger (HÆMA)",
  "status" : "active",
  "date" : "2022-11-24T00:00:00+02:00",
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
  "description" : "SOR: Afdelinger (HÆMA)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/SOR",
      "concept" : [{
        "code" : "1095041000016007",
        "display" : "Sønderborg"
      },
      {
        "code" : "239081000016004",
        "display" : "Odense"
      },
      {
        "code" : "244701000016009",
        "display" : "Esbjerg"
      },
      {
        "code" : "275721000016002",
        "display" : "Aalborg"
      },
      {
        "code" : "380011000016000",
        "display" : "Roskilde"
      },
      {
        "code" : "384851000016002",
        "display" : "Vejle"
      },
      {
        "code" : "440781000016009",
        "display" : "Aarhus"
      },
      {
        "code" : "900651000016000",
        "display" : "Gødstrup"
      },
      {
        "code" : "926731000016006",
        "display" : "Rigshospitalet"
      }]
    }]
  }
}

```
