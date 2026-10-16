# SOR: Trombolyseenhed (DAP) - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **SOR: Trombolyseenhed (DAP)**

## ValueSet: SOR: Trombolyseenhed (DAP) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/SORTrombolyseenhedDAP | *Version*:2.27.0 |
| Active as of 2022-10-13 | *Computable Name*:SORTrombolyseenhedDAP |

 
SOR: Trombolyseenhed (DAP) 

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
  "id" : "SORTrombolyseenhedDAP",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/SORTrombolyseenhedDAP",
  "version" : "2.27.0",
  "name" : "SORTrombolyseenhedDAP",
  "title" : "SOR: Trombolyseenhed (DAP)",
  "status" : "active",
  "date" : "2022-10-13T00:00:00+02:00",
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
  "description" : "SOR: Trombolyseenhed (DAP)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/SOR",
      "concept" : [{
        "code" : "253081000016000",
        "display" : "Rigshospitalet, Blegdamsvej, Neurologisk"
      },
      {
        "code" : "257721000016006",
        "display" : "Bispebjerg og Frederiksberg Hospitaler, Neurologisk – akut apopleksi"
      },
      {
        "code" : "265621000016001",
        "display" : "Bornholms Hospital"
      },
      {
        "code" : "223601000016004",
        "display" : "Roskilde Neurovaskulær Afdeling"
      },
      {
        "code" : "240121000016005",
        "display" : "Odense, Neurologisk"
      },
      {
        "code" : "503321000016003",
        "display" : "Sygehus Sønderjylland, Hjerne- og Nervesygdomme (Aabenraa)"
      },
      {
        "code" : "245291000016005",
        "display" : "Sydvestjysk Sygehus, Stroke Afsnit"
      },
      {
        "code" : "637201000016005",
        "display" : "Sygehus Lillebælt, Hjerne- og Nervesygdomme (Kolding)"
      },
      {
        "code" : "440081000016006",
        "display" : "Aarhus, Stroke"
      },
      {
        "code" : "900791000016001",
        "display" : "Regionshospitalet Gødstrup, Neurologisk Afsnit"
      },
      {
        "code" : "275981000016003",
        "display" : "Aalborg, Stroke"
      }]
    }]
  }
}

```
