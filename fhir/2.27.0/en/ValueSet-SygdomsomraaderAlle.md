# Sygdomsområder - alle - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Sygdomsområder - alle**

## ValueSet: Sygdomsområder - alle 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/SygdomsomraaderAlle | *Version*:2.27.0 |
| Active as of 2023-05-10 | *Computable Name*:SygdomsomraaderAlle |

 
Alle Sygdomsområder i KIP 

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
  "id" : "SygdomsomraaderAlle",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/SygdomsomraaderAlle",
  "version" : "2.27.0",
  "name" : "SygdomsomraaderAlle",
  "title" : "Sygdomsområder - alle",
  "status" : "active",
  "date" : "2023-05-10T00:00:00+02:00",
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
  "description" : "Alle Sygdomsområder i KIP",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Sygdomsomraader",
      "concept" : [{
        "code" : "ald",
        "display" : "ALD"
      },
      {
        "code" : "cll",
        "display" : "CLL"
      },
      {
        "code" : "dad",
        "display" : "DAD"
      },
      {
        "code" : "damyda",
        "display" : "DAMYDA"
      },
      {
        "code" : "danaks",
        "display" : "DANAKS"
      },
      {
        "code" : "danarrest",
        "display" : "DANARREST"
      },
      {
        "code" : "dandem",
        "display" : "DANDEM"
      },
      {
        "code" : "danstroke",
        "display" : "DANSTROKE"
      },
      {
        "code" : "dccg",
        "display" : "DCCG"
      },
      {
        "code" : "degc",
        "display" : "DEGC"
      },
      {
        "code" : "dhd",
        "display" : "DHD"
      },
      {
        "code" : "dhdb",
        "display" : "DHDB"
      },
      {
        "code" : "dhr",
        "display" : "DHR"
      },
      {
        "code" : "dkr",
        "display" : "DKR"
      },
      {
        "code" : "dkrr",
        "display" : "DKRR"
      },
      {
        "code" : "dmpn",
        "display" : "DMPN"
      },
      {
        "code" : "dnsl",
        "display" : "DNSL"
      },
      {
        "code" : "dpd",
        "display" : "DPD"
      },
      {
        "code" : "dsr",
        "display" : "DSR"
      },
      {
        "code" : "dts",
        "display" : "DTS"
      },
      {
        "code" : "duga",
        "display" : "DUGA"
      },
      {
        "code" : "hofter",
        "display" : "HOFTER"
      },
      {
        "code" : "kar",
        "display" : "KAR"
      },
      {
        "code" : "lyfo",
        "display" : "LYFO"
      },
      {
        "code" : "mds",
        "display" : "MDS"
      },
      {
        "code" : "retspsyk",
        "display" : "RETSPSYK"
      },
      {
        "code" : "hemgenix",
        "display" : "HEMGENIX (Amgros)"
      }]
    }]
  }
}

```
