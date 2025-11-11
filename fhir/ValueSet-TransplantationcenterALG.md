# Transplantationcenterliste til ALG - KIP Infrastructure v2.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Transplantationcenterliste til ALG**

## ValueSet: Transplantationcenterliste til ALG (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/TransplantationcenterALG | *Version*:2.13.0 |
| Active as of 2022-09-22 | *Computable Name*:TransplantationcenterALG |

 
Transplantationcenterliste til ALG 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

This value set contains 10 concepts

-------

 Explanation of the columns that may appear on this page: 

| | |
| :--- | :--- |
| Level | A few code lists that FHIR defines are hierarchical - each code is assigned a level. In this scheme, some codes are under other codes, and imply that the code they are under also applies |
| System | The source of the definition of the code (when the value set draws in codes defined elsewhere) |
| Code | The code (used as the code in the resource instance) |
| Display | The display (used in the*display*element of a[Coding](http://hl7.org/fhir/R4/datatypes.html#Coding)). If there is no display, implementers should not simply display the code, but map the concept into their application |
| Definition | An explanation of the meaning of the concept |
| Comments | Additional notes about how to use the code |



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "TransplantationcenterALG",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/TransplantationcenterALG",
  "version" : "2.13.0",
  "name" : "TransplantationcenterALG",
  "title" : "Transplantationcenterliste til ALG",
  "status" : "active",
  "experimental" : true,
  "date" : "2022-09-22T00:00:00+02:00",
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
  "description" : "Transplantationcenterliste til ALG",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/SOR",
        "concept" : [
          {
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
          }
        ]
      },
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
        "concept" : [
          {
            "code" : "other",
            "display" : "Andre"
          }
        ]
      }
    ]
  }
}

```
