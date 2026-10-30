# Diagnose DMPN opfølgning - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Diagnose DMPN opfølgning**

## ValueSet: Diagnose DMPN opfølgning 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/DiagnoseDMPNopfoelgning | *Version*:2.27.1 |
| Active as of 2023-02-03 | *Computable Name*:DiagnoseDMPNopfoelgning |

 
Uspecificerede diagnoser - DMPN opfølgning 

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
  "id" : "DiagnoseDMPNopfoelgning",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/DiagnoseDMPNopfoelgning",
  "version" : "2.27.1",
  "name" : "DiagnoseDMPNopfoelgning",
  "title" : "Diagnose DMPN opfølgning",
  "status" : "active",
  "date" : "2023-02-03T00:00:00+02:00",
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
  "description" : "Uspecificerede diagnoser - DMPN opfølgning",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/DiseasesUnspecified",
      "concept" : [{
        "code" : "polycythemia_vera",
        "display" : "Polycytæmia vera"
      },
      {
        "code" : "primary",
        "display" : "Primær Myelofibrose"
      },
      {
        "code" : "prefibrotic",
        "display" : "Præfibrotisk Myelofibrose"
      },
      {
        "code" : "essential_thrombocytosis",
        "display" : "Essentiel thrombocytose"
      },
      {
        "code" : "myeloproliferative_unclassified",
        "display" : "Uklassificerbar Myeloproliferativ sygdom"
      }]
    }]
  }
}

```
