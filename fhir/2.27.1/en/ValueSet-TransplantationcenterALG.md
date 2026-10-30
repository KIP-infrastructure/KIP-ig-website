# Transplantationcenterliste til ALG - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Transplantationcenterliste til ALG**

## ValueSet: Transplantationcenterliste til ALG 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/TransplantationcenterALG | *Version*:2.27.1 |
| Active as of 2022-09-22 | *Computable Name*:TransplantationcenterALG |

 
Transplantationcenterliste til ALG 

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
  "id" : "TransplantationcenterALG",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/TransplantationcenterALG",
  "version" : "2.27.1",
  "name" : "TransplantationcenterALG",
  "title" : "Transplantationcenterliste til ALG",
  "status" : "active",
  "date" : "2022-09-22T00:00:00+02:00",
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
  "description" : "Transplantationcenterliste til ALG",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/SOR",
      "concept" : [{
        "code" : "926731000016006",
        "display" : "926731000016006: Rigshospitalet - Blodsygdomme L, Senge (Shak: 1301101)"
      },
      {
        "code" : "380011000016000",
        "display" : "380011000016000: Region Sjællands Sygehusvæsen - ROS Hæmatologisk Afd.(Shak: 3800A20)"
      },
      {
        "code" : "239981000016003",
        "display" : "239981000016003: Odense Universitetshospital - Svendborg - OUH Neurokirurgisk Afsnit U (Odense) (Shak: 4202150)"
      },
      {
        "code" : "1095041000016007",
        "display" : "1095041000016007: Sygehus Sønderjylland - SHS Blodsygdomme Ambulatorium (Sønderborg) (Shak: 500061A)"
      },
      {
        "code" : "244701000016009",
        "display" : "244701000016009: Sydvestjysk Sygehus - SVS Blodsygdomme Afsnit (Esbjerg) (Shak: 5501053)"
      },
      {
        "code" : "384851000016002",
        "display" : "384851000016002: Sygehus Lillebælt - SLB Hæmatologisk Afsnit (Vejle) (Shak: 6008260)"
      },
      {
        "code" : "900651000016000",
        "display" : "900651000016000: Regionshospitalet Gødstrup - Klinik for Blodsygdomme Gødstrup - RHG (Shak: 664038K)"
      },
      {
        "code" : "440781000016009",
        "display" : "440781000016009: Aarhus Universitetshospital - Blodsygdomme Sengeafsnit (Shak: 6620141)"
      },
      {
        "code" : "275721000016002",
        "display" : "275721000016002: Aalborg Universitetshospital - Alb Hæmatologisk afd. (Shak: 8001101)"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "other",
        "display" : "Andre"
      }]
    }]
  }
}

```
